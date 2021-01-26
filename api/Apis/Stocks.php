<?php

// class Api_Records extends Api
class Api_Stocks extends Api
{
    public function __construct()
    {
        // In here you could initialize some shared logic between this API and rest of the project
    }

    /**
     * Get individual stock or stocks list
     */
    public function get($id = null)
    {
        if ($id) {
            // return $this->getRecord(intval($id));
            return $this->getStock(intval($id));
        } else {
            // return $this->getRecords();
            return $this->getStocks();
        }
    }

    private function getStock($stock_id)
    {
        // In real world there would be call to model with validation and probably token checking

        $stock = 'result';
        return Api::responseOk($stock);
    }

    private function getStocks()
    {

        $stock = 'result';
        return Api::responseOk($stock);
        // return Api::responseOk($stocks_return, $_metadata);
    }

    /**
     * Create stock
     */
    public function post($id, $data)
    {
        // In real world there would be call to model with validation and probably token checking
        $info = "";
        return Api::responseOk($data);
    }

    /**
     * Delete stock
     */
    public function delete( $id = null )
    {
        // In real world there would be call to model with validation and probably token checking
        return Api::responseOk('OK', array());
    }
}