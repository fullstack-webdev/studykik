<?php
$wsdl = "http://callfire.com/api/1.1/wsdl/callfire-service-http-soap12.wsdl";
$client = new SoapClient($wsdl, array(
'soap_version' => SOAP_1_2,
'login'        => '41530ff4e2a8',
'password'     => 'a44dd745a81cca3c'));

/**

 * QueryCalls. Determine status of calls filtered by BroadcastId, BatchId, etc...

 */

$query = new stdclass();
$query->MaxResults = 100; // long
$query->FirstResult = 0; // long
$cur_date = new DateTime('now');
mysql_query("INSERT INTO `cron_testing`(`id`, `name`) VALUES (NULL,'cron working for callfire from live server')");
$sql = 'select * from `0gf1ba_subscriber_list` where answers_get=\'2\' AND DATE_ADD(date, INTERVAL 15 DAY) > \''.$cur_date->format('Y-m-d H:i:s').'\' ';
//$sql = "select * from `0gf1ba_subscriber_list` where answers_get IN ('1','2')";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {

	   $subcid=$row["id"];
           $query->BroadcastId = $row["broadcast_id"]; // long
            //$query->BroadcastId = '6780220003'; // long
        $response = $client->QueryCalls($query);
        $response = json_decode(json_encode($response), true);
	//echo "<pre>";
	//print_r($response);
		if(isset($response['Call'])){
			if($response['Call']['State']=='FINISHED'){
				if(isset($response['Call']['CallRecord'])){
                                        $calltime=0;
                                        if(isset($response['Call']['CallRecord']['Duration'])){
                                            $calltime=$response['Call']['CallRecord']['Duration'] ;
                                            mysql_query("UPDATE 0gf1ba_subscriber_list SET call_duration=$calltime WHERE id=$subcid");
					    $received_time=date('Y-m-d H:i:s',strtotime($response['Call']['CallRecord']['FinishTime']));
					    mysql_query("UPDATE 0gf1ba_subscriber_list SET ivr_time='$received_time' WHERE id=$subcid");
                                        }
                                        if(isset($response['Call']['CallRecord']['1'])){
                                                if(isset($response['Call']['CallRecord']['1']['Duration'])){
                                                    $calltime=$response['Call']['CallRecord']['1']['Duration'] ;
                                                    mysql_query("UPDATE 0gf1ba_subscriber_list SET call_duration=$calltime WHERE id=$subcid");
						    $received_time=date('Y-m-d H:i:s',strtotime($response['Call']['CallRecord']['1']['FinishTime']));
						    mysql_query("UPDATE 0gf1ba_subscriber_list SET ivr_time='$received_time' WHERE id=$subcid");
                                                }
                        $response_callrecod_with_answers = array();
                        foreach($response['Call']['CallRecord'] as $val){
                            if(isset($val['QuestionResponse'])){
                                $response_callrecod_with_answers = $val;
                            }
                        }
						if(!empty($response_callrecod_with_answers)){
							if(isset($response_callrecod_with_answers['QuestionResponse']['Question'])){
								$record=$response_callrecod_with_answers['QuestionResponse'];
                                $response_callrecod_with_answers['QuestionResponse']=array();
								$response['Call']['CallRecord']['1']['QuestionResponse'][0]=$record;
							}
							$ans_1=0;
							$ans_2=0;
							$ans_3=0;
							$ans_4=0;
							$ans_5=0;
							$ans_6=0;
							$ans_7=0;
							$ans_8=0;
							$ans_9=0;
							$ans_10=0;
                                                        $ans_11=0;
							$ans_12=0;
							$ans_13=0;
							$ans_14=0;
							$ans_15=0;
							$ans_16=0;
							$ans_17=0;
							$ans_18=0;
							$ans_19=0;
							$ans_20=0;
                                                        $ans_21=0;
                                                        $ans_22=0;
							$ans_23=0;
							$ans_24=0;
							$ans_25=0;
							$ans_26=0;
							$ans_27=0;
							$ans_28=0;
							$ans_29=0;
							$ans_30=0;
							$answers_arr=array();
							$nm=1;
							foreach($response_callrecod_with_answers['QuestionResponse'] as $in => $res){
								if($res['Question']=='Q_01'){
									if($res['Response']=='yes'){
										$ans_1=1;
									}
									else{
										$ans_1=2;
									}
									$answers_arr[$nm]=$ans_1;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_02'){
									if($res['Response']=='yes'){
										$ans_2=1;
									}
									else{
										$ans_2=2;
									}
									$answers_arr[$nm]=$ans_2;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_03'){
									if($res['Response']=='yes'){
										$ans_3=1;
									}
									else{
										$ans_3=2;
									}
									$answers_arr[$nm]=$ans_3;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_04'){
									if($res['Response']=='yes'){
										$ans_4=1;
									}
									else{
										$ans_4=2;
									}
									$answers_arr[$nm]=$ans_4;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_05'){
									if($res['Response']=='yes'){
										$ans_5=1;
									}
									else{
										$ans_5=2;
									}
									$answers_arr[$nm]=$ans_5;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_06'){
									if($res['Response']=='yes'){
										$ans_6=1;
									}
									else{
										$ans_6=2;
									}
									$answers_arr[$nm]=$ans_6;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_07'){
									if($res['Response']=='yes'){
										$ans_7=1;
									}
									else{
										$ans_7=2;
									}
									$answers_arr[$nm]=$ans_7;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_08'){
									if($res['Response']=='yes'){
										$ans_8=1;
									}
									else{
										$ans_8=2;
									}
									$answers_arr[$nm]=$ans_8;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_09'){
									if($res['Response']=='yes'){
										$ans_9=1;
									}
									else{
										$ans_9=2;
									}
									$answers_arr[$nm]=$ans_9;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_010'){
									if($res['Response']=='yes'){
										$ans_10=1;
									}
									else{
										$ans_10=2;
									}
									$answers_arr[$nm]=$ans_10;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_011'){
									if($res['Response']=='yes'){
										$ans_11=1;
									}
									else{
										$ans_11=2;
									}
									$answers_arr[$nm]=$ans_11;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_012'){
									if($res['Response']=='yes'){
										$ans_12=1;
									}
									else{
										$ans_12=2;
									}
									$answers_arr[$nm]=$ans_12;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_013'){
									if($res['Response']=='yes'){
										$ans_13=1;
									}
									else{
										$ans_13=2;
									}
									$answers_arr[$nm]=$ans_13;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_014'){
									if($res['Response']=='yes'){
										$ans_14=1;
									}
									else{
										$ans_14=2;
									}
									$answers_arr[$nm]=$ans_14;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_015'){
									if($res['Response']=='yes'){
										$ans_15=1;
									}
									else{
										$ans_15=2;
									}
									$answers_arr[$nm]=$ans_15;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_016'){
									if($res['Response']=='yes'){
										$ans_16=1;
									}
									else{
										$ans_16=2;
									}
									$answers_arr[$nm]=$ans_16;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_017'){
									if($res['Response']=='yes'){
										$ans_17=1;
									}
									else{
										$ans_17=2;
									}
									$answers_arr[$nm]=$ans_17;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_018'){
									if($res['Response']=='yes'){
										$ans_18=1;
									}
									else{
										$ans_18=2;
									}
									$answers_arr[$nm]=$ans_18;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_019'){
									if($res['Response']=='yes'){
										$ans_19=1;
									}
									else{
										$ans_19=2;
									}
									$answers_arr[$nm]=$ans_19;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_020'){
									if($res['Response']=='yes'){
										$ans_20=1;
									}
									else{
										$ans_20=2;
									}
									$answers_arr[$nm]=$ans_20;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_021'){
									if($res['Response']=='yes'){
										$ans_21=1;
									}
									else{
										$ans_21=2;
									}
									$answers_arr[$nm]=$ans_21;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_022'){
									if($res['Response']=='yes'){
										$ans_22=1;
									}
									else{
										$ans_22=2;
									}
									$answers_arr[$nm]=$ans_22;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_023'){
									if($res['Response']=='yes'){
										$ans_23=1;
									}
									else{
										$ans_23=2;
									}
									$answers_arr[$nm]=$ans_23;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_024'){
									if($res['Response']=='yes'){
										$ans_24=1;
									}
									else{
										$ans_24=2;
									}
									$answers_arr[$nm]=$ans_24;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_025'){
									if($res['Response']=='yes'){
										$ans_25=1;
									}
									else{
										$ans_25=2;
									}
									$answers_arr[$nm]=$ans_25;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_026'){
									if($res['Response']=='yes'){
										$ans_26=1;
									}
									else{
										$ans_26=2;
									}
									$answers_arr[$nm]=$ans_26;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_027'){
									if($res['Response']=='yes'){
										$ans_27=1;
									}
									else{
										$ans_27=2;
									}
									$answers_arr[$nm]=$ans_27;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_028'){
									if($res['Response']=='yes'){
										$ans_28=1;
									}
									else{
										$ans_28=2;
									}
									$answers_arr[$nm]=$ans_28;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_029'){
									if($res['Response']=='yes'){
										$ans_29=1;
									}
									else{
										$ans_29=2;
									}
									$answers_arr[$nm]=$ans_29;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_030'){
									if($res['Response']=='yes'){
										$ans_30=1;
									}
									else{
										$ans_30=2;
									}
									$answers_arr[$nm]=$ans_30;
									$nm=$nm+1;
								}

							}
							if(!empty($answers_arr)){
								$ch=1;
								foreach($answers_arr as $ans){
									if($ans==2){
										$ch=0;
										break;
									}
								}
								if($ch==1){
									$qualified=1;
								}
								else{
									$qualified=2;
								}
								$qry_str="";
								foreach($answers_arr as $in=>$answ){
									$qry_str.="answer_".$in."=".$answ.",";
								}
								mysql_query("UPDATE 0gf1ba_subscriber_list SET ".$qry_str."answers_get=1,is_callfire_qualified=$qualified WHERE id=$subcid");
							}
						}else{
                            mysql_query("UPDATE 0gf1ba_subscriber_list SET answers_get=0 WHERE id=$subcid");
						}
					}
					else{
						if(isset($response['Call']['CallRecord']['QuestionResponse'])){
							if(isset($response['Call']['CallRecord']['QuestionResponse']['Question'])){
								$record=$response['Call']['CallRecord']['QuestionResponse'];
								$response['Call']['CallRecord']['QuestionResponse']=array();
								$response['Call']['CallRecord']['QuestionResponse'][0]=$record;
							}
							$ans_1=0;
							$ans_2=0;
							$ans_3=0;
							$ans_4=0;
							$ans_5=0;
							$ans_6=0;
							$ans_7=0;
							$ans_8=0;
							$ans_9=0;
							$ans_10=0;
                                                        $ans_11=0;
							$ans_12=0;
							$ans_13=0;
							$ans_14=0;
							$ans_15=0;
							$ans_16=0;
							$ans_17=0;
							$ans_18=0;
							$ans_19=0;
							$ans_20=0;
                                                        $ans_21=0;
							$ans_22=0;
							$ans_23=0;
							$ans_24=0;
							$ans_25=0;
							$ans_26=0;
							$ans_27=0;
							$ans_28=0;
							$ans_29=0;
							$ans_30=0;
							$answers_arr=array();
							$nm=1;
							foreach($response['Call']['CallRecord']['QuestionResponse'] as $in => $res){
								if($res['Question']=='Q_01'){
									if($res['Response']=='yes'){
										$ans_1=1;
									}
									else{
										$ans_1=2;
									}
									$answers_arr[$nm]=$ans_1;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_02'){
									if($res['Response']=='yes'){
										$ans_2=1;
									}
									else{
										$ans_2=2;
									}
									$answers_arr[$nm]=$ans_2;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_03'){
									if($res['Response']=='yes'){
										$ans_3=1;
									}
									else{
										$ans_3=2;
									}
									$answers_arr[$nm]=$ans_3;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_04'){
									if($res['Response']=='yes'){
										$ans_4=1;
									}
									else{
										$ans_4=2;
									}
									$answers_arr[$nm]=$ans_4;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_05'){
									if($res['Response']=='yes'){
										$ans_5=1;
									}
									else{
										$ans_5=2;
									}
									$answers_arr[$nm]=$ans_5;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_06'){
									if($res['Response']=='yes'){
										$ans_6=1;
									}
									else{
										$ans_6=2;
									}
									$answers_arr[$nm]=$ans_6;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_07'){
									if($res['Response']=='yes'){
										$ans_7=1;
									}
									else{
										$ans_7=2;
									}
									$answers_arr[$nm]=$ans_7;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_08'){
									if($res['Response']=='yes'){
										$ans_8=1;
									}
									else{
										$ans_8=2;
									}
									$answers_arr[$nm]=$ans_8;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_09'){
									if($res['Response']=='yes'){
										$ans_9=1;
									}
									else{
										$ans_9=2;
									}
									$answers_arr[$nm]=$ans_9;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_010'){
									if($res['Response']=='yes'){
										$ans_10=1;
									}
									else{
										$ans_10=2;
									}
									$answers_arr[$nm]=$ans_10;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_011'){
									if($res['Response']=='yes'){
										$ans_11=1;
									}
									else{
										$ans_11=2;
									}
									$answers_arr[$nm]=$ans_11;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_012'){
									if($res['Response']=='yes'){
										$ans_12=1;
									}
									else{
										$ans_12=2;
									}
									$answers_arr[$nm]=$ans_12;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_013'){
									if($res['Response']=='yes'){
										$ans_13=1;
									}
									else{
										$ans_13=2;
									}
									$answers_arr[$nm]=$ans_13;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_014'){
									if($res['Response']=='yes'){
										$ans_14=1;
									}
									else{
										$ans_14=2;
									}
									$answers_arr[$nm]=$ans_14;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_015'){
									if($res['Response']=='yes'){
										$ans_15=1;
									}
									else{
										$ans_15=2;
									}
									$answers_arr[$nm]=$ans_15;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_016'){
									if($res['Response']=='yes'){
										$ans_16=1;
									}
									else{
										$ans_16=2;
									}
									$answers_arr[$nm]=$ans_16;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_017'){
									if($res['Response']=='yes'){
										$ans_17=1;
									}
									else{
										$ans_17=2;
									}
									$answers_arr[$nm]=$ans_17;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_018'){
									if($res['Response']=='yes'){
										$ans_18=1;
									}
									else{
										$ans_18=2;
									}
									$answers_arr[$nm]=$ans_18;
									$nm=$nm+1;

								}
								if($res['Question']=='Q_019'){
									if($res['Response']=='yes'){
										$ans_19=1;
									}
									else{
										$ans_19=2;
									}
									$answers_arr[$nm]=$ans_19;
									$nm=$nm+1;
								}
								if($res['Question']=='Q_020'){
									if($res['Response']=='yes'){
										$ans_20=1;
									}
									else{
										$ans_20=2;
									}
									$answers_arr[$nm]=$ans_20;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_021'){
									if($res['Response']=='yes'){
										$ans_21=1;
									}
									else{
										$ans_21=2;
									}
									$answers_arr[$nm]=$ans_21;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_022'){
									if($res['Response']=='yes'){
										$ans_22=1;
									}
									else{
										$ans_22=2;
									}
									$answers_arr[$nm]=$ans_22;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_023'){
									if($res['Response']=='yes'){
										$ans_23=1;
									}
									else{
										$ans_23=2;
									}
									$answers_arr[$nm]=$ans_23;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_024'){
									if($res['Response']=='yes'){
										$ans_24=1;
									}
									else{
										$ans_24=2;
									}
									$answers_arr[$nm]=$ans_24;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_025'){
									if($res['Response']=='yes'){
										$ans_25=1;
									}
									else{
										$ans_25=2;
									}
									$answers_arr[$nm]=$ans_25;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_026'){
									if($res['Response']=='yes'){
										$ans_26=1;
									}
									else{
										$ans_26=2;
									}
									$answers_arr[$nm]=$ans_26;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_027'){
									if($res['Response']=='yes'){
										$ans_27=1;
									}
									else{
										$ans_27=2;
									}
									$answers_arr[$nm]=$ans_27;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_028'){
									if($res['Response']=='yes'){
										$ans_28=1;
									}
									else{
										$ans_28=2;
									}
									$answers_arr[$nm]=$ans_28;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_029'){
									if($res['Response']=='yes'){
										$ans_29=1;
									}
									else{
										$ans_29=2;
									}
									$answers_arr[$nm]=$ans_29;
									$nm=$nm+1;
								}
                                                                if($res['Question']=='Q_030'){
									if($res['Response']=='yes'){
										$ans_30=1;
									}
									else{
										$ans_30=2;
									}
									$answers_arr[$nm]=$ans_30;
									$nm=$nm+1;
								}
							}
							if(!empty($answers_arr)){
								$ch=1;
								foreach($answers_arr as $ans){
									if($ans==2){
										$ch=0;
										break;
									}
								}
								if($ch==1){
									$qualified=1;
								}
								else{
									$qualified=2;
								}
								$qry_str="";
								foreach($answers_arr as $in=>$answ){
									$qry_str.="answer_".$in."=".$answ.",";
								}
								mysql_query("UPDATE 0gf1ba_subscriber_list SET ".$qry_str."answers_get=1,is_callfire_qualified=$qualified WHERE id=$subcid");
							}
						}
					}
				}else{
                    mysql_query("UPDATE 0gf1ba_subscriber_list SET answers_get=0 WHERE id=$subcid");
                }
			}
		}


//echo gmdate("i:s", 263);


    }

} else {
    echo "0 results";
}


?>