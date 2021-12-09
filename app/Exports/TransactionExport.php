<?php

namespace App\Exports;

use App\Models\Transaction;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;


class TransactionExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection

    */
    private $transactions;
//    Export theo trang thai loc
    public function __construct($transactions)
    {
        $this->transactions = $transactions;
    }
    public function collection()
    {
        //        Export 1 tu so trang thai mac dinh tren databae
        $transactions = $this->transactions;
        $formatTransactions =[];
        foreach ($transactions as $key => $item){
            $formatTransactions[]=[
                'id' => $item->id,
                'total' => number_format($item->t_total_money,0,',','.'),
                'name' => $item->t_name,
                'email' => $item->t_email,
                'phone' => $item->t_phone,
                'address' => $item->t_address,
                'status' =>  $item->getStatus($item->t_status)['name'] ,
                'type'  => $item->t_user_id ? "Thành viên" : "Khách",
                'update' => $item->updated_at
            ];
        }
        return collect($formatTransactions);
    }

    public function headings(): array
    {
        return [
            '#',
            'Total',
            'Name',
            'Email',
            'Phone',
            'Address',
            'Status',
            'Type',
            'Updated',
        ];
    }
}
