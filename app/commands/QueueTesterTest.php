<?php

class QueueTesterTest {
    public function fire($job, $data)
    {
        $job->delete();
        $start = date('H:i:s');
        Eloquent::unguard();
        $password = Hash::make('111111');
        for( $i = 0; $i < 100000; $i++) {
            QueueTester::create(array(
                'email'    => 'a'.$i.'@a.com',
                'password' => $password,
            ));
        }
        $end = date('H:i:s');
        $times = [$start, $end];
        $str = implode('----', $times);
        @file_put_contents('/home/snowan/Documents/laravelQueueTest/QueueTester_' . date('H:i:s') . '.txt', $str);

    }
}