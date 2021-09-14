<?php

class Taula
{
    /**
     * @var array $products
     */
    private $products;

    /**
     * Taula constructor.
     *
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function printTable()
    {
        $tableHeader = '
            <table class="table">
                <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">Name</th>
                         <th scope="col">Quantity</th>
                         <th scope="col">Price</th>
                         <th scope="col">Total</th>
                         <th scope="col">Actions</th>
                     </tr>
               </thead>
               <tbody>
        ';

        $tableContent = '';
        foreach ($this->products as $product) {
            $tableContent .= '
                <tr>
                    <th scope="row">' . $product['id'] . '</th>
                    <td>' . $product['name'] . '</td>
                    <td>' . $product['quantity'] . '</td>
                    <td>' . $product['price'] . '</td>
                    <td>' . $product['quantity']*$product['price']  . '</td>
                    <td>
                        <a class="btn btn-secondary" href="edit.php?id=' . $product['id'] . '"><i class="fas fa-pen-alt"></i></a>
                        <a class="btn btn-danger" href="request/deleteRequest.php?id=' . $product['id'] . '"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>';
        }


        $tableFooter = '
                </tbody>
            </table>   
        ';

        return $tableHeader . $tableContent . $tableFooter;
    }
}