<?php

class QueueAuthorTest {
    public function fire($job, $data)
    {
        // Log::info('This is written via the QueueDemo class at ' . time() . '.');
        // $date = Carbon::now();
        $job->delete();
        $start = date('H:i:s');
        Eloquent::unguard();
        $password = Hash::make('111111');
        for( $i = 0; $i < 100000; $i++) {
            QueueAuthor::create(array(
                'email'    => 'a'.$i.'@a.com',
                'password' => $password,
            ));
        }
        $end = date('H:i:s');
        $times = [$start, $end];
        $str = implode('----', $times);
        @file_put_contents('/home/snowan/Documents/laravelQueueTest/QueueAuthor_' . date('H:i:s') . '.txt', $str);

    }
}