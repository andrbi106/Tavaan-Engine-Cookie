<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Cookie\Contracts;

/**
 * قرارداد CookieJar.
 *
 * @see \Tavaan\Engine\Http\Cookie\CookieJar
 * @api 1.0
 */
interface CookieJarInterface
{
    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد forever.
     *
     * @return mixed
     */
    public function forever(/* ... */): mixed;

    /**
     * متد queue.
     *
     * @return mixed
     */
    public function queue(/* ... */): mixed;

    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد forget.
     *
     * @return mixed
     */
    public function forget(/* ... */): mixed;

    /**
     * متد hasQueued.
     *
     * @return mixed
     */
    public function hasQueued(/* ... */): mixed;

    /**
     * متد queued.
     *
     * @return mixed
     */
    public function queued(/* ... */): mixed;
}