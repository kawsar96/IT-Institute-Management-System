<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportStudents implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {  
        return   $students = Student::all(); 
    
    }

    public function headings(): array
    {
        return [
            'ID',
            'Firstname',
            'Lastname',
            'Father Name',
            'Mother Name',
            'Mobile No.',
            'Email',
            'School',
            'School Year',
            'School Grade',
            'College',
            'College Year',
            'College Grade',
            'University',
            'University Year',
            'University Grade',
            'Course',
            'Batch',
            'Reference',
            'Gender',
            'DoB',
            'Admission Amount',
            '1st Installment',
            'Due Amount',
            '2nd Installment',
            'Photo',
            'Address',
            '1st installment approved',
            '1st installment notice',
            '2nd installment approved',
            '2nd installment notice',
            'Roll Number',
            'transactionId',
            'gurdian phone number',
            '1st installment Time',
            '2nd installment Time',
            


        ];
    }
}
