<?php
/*
CareersJob Shortcode Support
*/
function careersjob_list_func() {

    $get_InstId=get_option('careersjob_institution_id');//get inst id

    //$content  = 'Institution ID ='.$get_InstId; //Checking Ins ID getting or not

    $json_data = file_get_contents("http://edubreaks.in/HRServices/api/SjobVacancy/GetJobVacanciesByIntId?InstId=$get_InstId"); // this will require php.ini to be setup to allow fopen over URLs
    
    if($json_data)
    {

        $json_arr=json_decode($json_data, true);
        $json_arr_count=count($json_arr);
    }
    

    /** Includes custom_css script for customise the css color */
    require_once 'custom_css.php';

    $content .= '<div>';
    $content .='<table class="bordered">
        <tbody>
        <tr id="joblist_color" >
            <th>Job Title</th>
            <th>Job Category</th>
            <th>Vacancies</th>
            <th>Locations</th>
            <th>Exp</th>
        </tr>';
 
    if($json_arr_count>0)
    {
      $cnt=0;
      while($json_arr_count>$cnt) {

            $JobPostId=$json_arr[$cnt]['JobPostId'];
            $PostName=$json_arr[$cnt]['PostName'];
            $JobTitle=$json_arr[$cnt]['JobTitle'];
            $InstitutionName=$json_arr[$cnt]['InstitutionName'];
            $PostCount=$json_arr[$cnt]['PostCount'];
            $LocationIds=$json_arr[$cnt]['LocationIds'];
            $Exp=$json_arr[$cnt]['Exp'];

            $JobPostLink='http://edubreaks.in/JobList/ShowDetails?JobPostId='.$JobPostId;

            $content.='<tr>
              <td><a style="color:blue;text-decoration:underline" href="'.$JobPostLink.'" target="_blank">'.$PostName.'</a></td>
              <td>'.$JobTitle.'</td>
              <td align="center">'.$PostCount.'</td>
              <td align="center">'.$LocationIds.'</td>
              <td align="center">'.$Exp.'</td>
            </tr>';

      $cnt++; } //end while loop
    }// if count close
    else
    { $content .='<tr><td colspan=10>No data found..</td></tr>'; }

    $content .='</tbody></table></div>';


    if ($echo)
        echo $content;
    else
        return $content;
}//fun end
	
add_shortcode('careersjob_list', 'careersjob_list_func');//Create careersjob_list shotcode

?>