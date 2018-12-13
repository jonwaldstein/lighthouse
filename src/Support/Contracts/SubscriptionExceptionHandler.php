<?php

namespace Nuwave\Lighthouse\Support\Contracts;

interface SubscriptionExceptionHandler
{
    /**
     * Handle authentication error.
     *
     * @param \Throwable $e
     */
    public function handleAuthError($e);

    /**
     * Handle broadcast error.
     *
     * @param \Throwable $e
     */
    public function handleBroadcastError($e);
}
