<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
//if (!defined('BASEPATH')) exit('No direct script access allowed');
namespace App\Controllers\admin;

use App\Controllers\BaseController;


class Lab extends BaseController {
    public function tableLab() {
        // 在这里编写代码以获取您的数据，可以从数据库或其他来源获取数据

        // 模拟一些数据作为示例

        $data = [
            'title'=> 'Table LAB',
            'heading'=> 'SDLC',
            'todo_list'=> [
            'Week_1' => [
                'Requirement Gathering and Analysis',
                'You should analysis relevant requirement and create SRS (Software Requirement Specification) file.',
            ],
            'Week_2' => [
                'Design',
                 'Following the SRS to design the software architecture (OOD) and technology selection.',
            ],
            'Week_3' => [
                 'Implementation or Coding',
                 'Following the SRS and above design to implement your project (OOP) .',
            ],
            'Week_4' => [
                 'Testing',
                'Following the SRS and above design to test your project and fix the bug to achieve the client requirement.',
            ],
            'Week_5' => [
                 'Deployment',
                 'Deployment your project under the UAT (User Acceptance Testing) environment.',
            ],
            'Week_6' => [
                 'Maintenance',
                 'Following the the SRS to maintain your project.',
            ],
            ]
            ];
            
        // 将数据传递给视图文件
        return view('Lab_view', $data);
    }
}
?>