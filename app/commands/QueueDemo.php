<?php

class QueueDemo {
    public function fire($job, $data)
    {
        // Log::info('This is written via the QueueDemo class at ' . time() . '.');
        // $date = Carbon::now();
        @file_put_contents('/home/snowan/Documents/laravelQueueTest/QueueDemo_' . date('H:i:s') . '.txt', $data);
        // $job->delete();
        // Eloquent::unguard();
        // $password = Hash::make('111111');
        // for( $i = 0; $i < 100000; $i++) {
        //     // $model = new QueueUser;
        //     // $model->fill([
        //     //     'email'    => 'a'.$i.'@a.com',
        //     //     'password' => $password,
        //     // ]);
        //     // $model->save();
        //     QueueUser::create(array(
        //         'email'    => 'a'.$i.'@a.com',
        //         'password' => $password,
        //     ));
        // }
        $job->delete();
    }
}