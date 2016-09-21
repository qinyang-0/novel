<?php

use App\Jobs\SnatchRepair;
use Illuminate\Database\Seeder;

class RepairNovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dtStart = microtime_float();

        for ($id =4; $id<1000; $id++){
            dispatch(new SnatchRepair($id, true));
        }
        $continueEnd = microtime_float();
        echo "添加队列完毕\n";
        echo "耗时：".($continueEnd-$dtStart)."秒\n";
    }
}
