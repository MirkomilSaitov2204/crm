<?php

namespace Domain\User\Interfaces;

use Illuminate\Database\Eloquent\Model;

/**
 * @interface UserInterface
 * @author <mirkomilmirabdullaevich@gmail.com>
 */
interface UserInterface
{
    /**
     * @param array $data
     * @return Model
     */
    public function store(array $data): Model;

    /**
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function update(array $data, int $id): bool;

    /**
     * @param int $id
     * @return bool
     */
    public function destroy(int $id): bool;
}
