<?php
class storeQuest {
    public static function setQuest()
    {
        $db = new MyDataBase;

        //$insertData = $db->MySqlInsert("quests" , ['session' , 'ip_addr' ] , [questSessionId() , questIp() ]);
        $checkSession = $db->MySqlCheck("quests" , "session" , questSessionId());

        echo questSessionId();
        if ($checkSession) {

            $db->MySqlSafeUpdate("quests" , "lastupdate" , shamsiTime() , "session" , questSessionId());

        } else {

            $db->MySqlInsert("quests" , ['session' , 'ip_addr' , 'lastupdate' ] , [questSessionId() , questIp() , shamsiTime() ]);

        }


    }
}

storeQuest::setQuest();