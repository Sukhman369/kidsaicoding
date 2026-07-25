<?php

namespace App\Services;

use App\Models\PaymentModel;

class PaymentService
{
    protected PaymentModel $paymentModel;

    // Standard platform settlement commission percentage (e.g. 5.0% platform fee for open-source settlements)
    protected float $defaultPlatformFeePercent = 5.0;

    public function __construct()
    {
        $this->paymentModel = new PaymentModel();
    }

    /**
     * Calculate settlement breakdown for a payment amount.
     * Useful for open-source academy course sales & platform fee deduction.
     *
     * @param float $amount Total course/service price
     * @param float|null $customFeePercent Optional custom fee override
     * @return array
     */
    public function calculateSettlement(float $amount, ?float $customFeePercent = null): array
    {
        $feePercent = $customFeePercent !== null ? $customFeePercent : $this->defaultPlatformFeePercent;
        $platformFee = round(($amount * $feePercent) / 100, 2);
        $netPayout   = round($amount - $platformFee, 2);

        return [
            'status' => true,
            'data'   => [
                'total_amount'         => $amount,
                'platform_fee_percent' => $feePercent,
                'platform_fee'         => $platformFee,
                'net_academy_payout'   => $netPayout,
                'currency'             => 'INR'
            ]
        ];
    }

    /**
     * Record a new pending payment entry.
     *
     * @param int $userId
     * @param int $courseId
     * @param float $amount
     * @param string $paymentMethod
     * @return array
     */
    public function initializePayment(int $userId, int $courseId, float $amount, string $paymentMethod = 'razorpay'): array
    {
        $settlement = $this->calculateSettlement($amount);

        $paymentData = [
            'user_id'        => $userId,
            'course_id'      => $courseId,
            'amount'         => $amount,
            'status'         => 'pending',
            'payment_method' => $paymentMethod,
            'transaction_id' => 'TXN_' . strtoupper(uniqid()),
            'created_at'     => date('Y-m-d H:i:s')
        ];

        try {
            $paymentId = $this->paymentModel->insert($paymentData);

            return [
                'status'  => true,
                'message' => 'Payment initialized successfully.',
                'data'    => array_merge(['payment_id' => $paymentId], $paymentData, [
                    'settlement' => $settlement['data']
                ])
            ];
        } catch (\Exception $e) {
            return [
                'status'  => false,
                'message' => 'Failed to initialize payment: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Complete a payment transaction.
     *
     * @param int $paymentId
     * @param string $transactionId
     * @return array
     */
    public function markAsCompleted(int $paymentId, string $transactionId): array
    {
        $payment = $this->paymentModel->find($paymentId);
        if (!$payment) {
            return ['status' => false, 'message' => 'Payment record not found.'];
        }

        $updateData = [
            'status'         => 'completed',
            'transaction_id' => $transactionId,
            'updated_at'     => date('Y-m-d H:i:s')
        ];

        $this->paymentModel->update($paymentId, $updateData);

        return [
            'status'  => true,
            'message' => 'Payment marked as completed.',
            'data'    => $this->paymentModel->find($paymentId)
        ];
    }
}
