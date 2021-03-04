<?php
namespace App\Interfaces;

interface ApiCrudInterface {

    /**
     * get all data 
     *
     * @return array all data
     */
    public function all();

    /**
     * Get Paginated Item
     *
     * @param int   Page No
     * @return array get Paginated Item
     */
    public function paginate(int $perPage);

    /**
     * Create New Item
     *
     * @param array $data
     * @return object created item
     */
    public function create(array $data);

    /**
     * Delete Item
     *
     * @param int $id
     * @return object Deleted Product
     */
    public function delete($id);

    /**
     * find item by id
     *
     * @param int $id
     * @return object item
     */
    public function find($id);

    /**
     * Update Item
     *
     * @param int $id
     * @param array $data
     * @return object Updated Item
     */
    public function update($id,array $data);
}