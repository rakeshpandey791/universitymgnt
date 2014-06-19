<?php
    $config=array(
        'session/index'=>array(
            array(
                'field'=>'SessionFrom',
                'label'=>'Session From',
                'rules'=>'required|xss_clean',
            ),
            array(
                'field'=>'SessionTo',
                'label'=>'Session To',
                'rules'=>'required|xss_clean',
            ),
            array(
                'field'=>'Year',
                'label'=>'Year',
                'rules'=>'required|xss_clean',
            ),
        ),
        'university/index'=>array(
            array(
                'field'=>'UniversityName',
                'label'=>'University Name',
                'rules'=>'required|xss_clean|is_unique[university.university_name]',
            ),
            array(
                'field'=>'UniversityCode',
                'label'=>'University Code',
                'rules'=>'required|xss_clean|is_unique[university.university_code]',
            ),
        ),
        'program/index'=>array(
            array(
                'field'=>'University',
                'label'=>'University',
                'rules'=>'required|xss_clean',
            ),
            array(
                'field'=>'ProgramName',
                'label'=>'Program Name',
                'rules'=>'required|xss_clean|is_unique[program.program_name]',
            ),
        ),
    );
?>