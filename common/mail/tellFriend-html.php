<?php 
$trip_fact = json_decode($model->overview_text,true);
?>
<tr>
<td colspan="3">
    <div style=" line-height: 18px; font-weight: bold;margin:10px 0;text-align:center; ">
    <a href="https://www.mountainsherpatrekking.com/<?=$model->slug;?>" style="font-size: 20px; color: #333333; text-decoration: none;" target="_blank">
    <?=$model->name;?>                </a>
    </div>
    <img width="600px" src="https://www.mountainsherpatrekking.com/images/frontend/main/<?=$model->image;?>" alt="Everest Base Camp Trek Photo with expert sherpa guide">                <div style="font-size: 14px; color: #333333; line-height: 18px;margin: 0 0 10px;">
    <?=$model->packageDesc->description;?>
    </div>
</td>
</tr>
<tr>
<td colspan="3">
    <div style="display:block; background:#006498; font-size: 20px; margin-bottom: 3px; padding: 10px; text-transform: uppercase; color:#fff;">
        Overview
    </div>
</td>
</tr>
<tr>
<td colspan="3">
    <table style="margin:0 0 20px 0;" width="100%">
                                <tbody>
                            

        <?php if(!empty($trip_fact)){?>
            <tr>
            <td style="text-align: right; vertical-align: text-top;padding:5px; font-weight: bold;">&nbsp;</td>
            <td>
                <table width="100%">
                    <tbody>
                    
                    <tr>
                        <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: top;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                        Trip Style                                      
                        </td>

                        <td>
                        <p style="color: #ff6f00;font: 14px 'Neo_Sans_Bold';">
                        <?=$trip_fact['trip_style_text'];?>   
                                <!-- <span  style="display: block;font: italic 14px 'neo_sans';">per persion</span>                                       -->
                                <!-- <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span> -->
                            </p>

                        </td>
                        
                    </tr>

                    <tr>
                    <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: top;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                            Trip Difficulty                              
                            
                        </td>

                        <td>
                            <p style="color: #ff6f00;font: 14px 'Neo_Sans_Bold';">
                                <?=$trip_fact['trip_difficulty_text'];?>
                                </p>  
                            <p> 
                                <?= isset($trip_fact['trip_difficulty_tooltip_text'])?$trip_fact['trip_difficulty_tooltip_text']:'';?>
                            </p> 

                        </td>
                    </tr>
                    
                </tbody></table>
            </td>
        </tr>
        <?php }?>
            <tr>
            <td style="text-align: right; vertical-align: text-top;padding:5px; font-weight: bold;">&nbsp;</td>
            <td>
                <table width="100%">
                    <tbody><tr>
                        <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                        3 Star Hotel Package                                      
                        <p style="color: #ff6f00;font: 36px 'Neo_Sans_Bold';">
                                USD <?=$model->price_3;?><br />      
                                <span  style="display: block;font: italic 14px 'neo_sans';">per persion</span>                                      
                                <!-- <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span> -->
                            </p>
                        </td>
                        <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                            5 Star Hotel Package                                  
                                <p style="color: #ff6f00;font: 36px 'Neo_Sans_Bold';">
                                USD <?=$model->price_5;?><br />   
                                <span style="display: block;font: italic 14px 'neo_sans';">per persion</span>                                         
                                <!-- <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span> -->
                            </p>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                            3-star Supplement                                        <p style="display: block; margin: 3px 0px 0px; vertical-align: middle; height: 30px; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #139B2B">
                                USD 0                                            <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">Per Person</span>
                            </p>
                        </td>
                        <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                            5-star Supplement                                        <p style="display: block; margin: 3px 0px 0px; vertical-align: middle; height: 30px; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #139B2B">
                                USD 0                                            <span style="display: inline;padding: 0.1em 0.3em;position: absolute;background: none repeat scroll 0% 0% #108E25;font-size: 12px;font-weight: 400;color: #FFF;text-transform: lowercase;bottom: 0px;right: 0px;">
                                    Per Person</span>
                            </p>
                        </td>
                    </tr> -->
                </tbody></table>
            </td>
        </tr>
        <tr>
            <td></td> 
            <td style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                <table width="100%">
                    <tbody><tr>
                        <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                            <a href="https://www.mountainsherpatrekking.com/en/everest-base-camp-trek" style="display: block; margin: 3px 0px 0px; vertical-align: middle; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #139B2B; text-decoration: none;" target="_blank">
                                View Details
                            </a>
                        </td>
                        <td width="50%" style="font-weight: bold;font-size: 15px;font-family: lato;color: #3D3D3D;vertical-align: middle;border-color: #F3F3F3;text-transform: capitalize;padding: 0px 3% 20px 8px;">
                            <a href="https://www.mountainsherpatrekking.com/en/booking/everest-base-camp-trek" style="display: block; margin: 3px 0px 0px; vertical-align: middle; padding: 10px; text-align: center; color: #FFF; line-height: 20px; font-size: 20px; font-weight: bold; text-transform: uppercase;position: relative;background: none repeat scroll 0% 0% #EBBD00; text-decoration: none;" target="_blank">
                                Book Now
                            </a>
                        </td>
                    </tr>
                </tbody></table>   
            </td>
        </tr>
    </tbody>
    </table>
</td>
</tr>
