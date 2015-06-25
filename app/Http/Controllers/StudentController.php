<?php 
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use DB;

class StudentController extends BaseController {

    /**
     * 显示所有学生的信息
     *
     * @todo  分页
     * @return 
     */
    public function listAllStudentInfo()
    {
        $users = DB::select('select student.*,sum(student_grade.grade) as gradeTotal from student left join student_grade on student.student_id = student_grade.student_id GROUP BY student.student_id');

        return view('student.index',array('data'=>$users));
    }

    /**
     * 录入学生信息
     *
     * @todo  数据检查
     * @return 
     */
    public function createStudentInfo()
    {
        $tip = '';
        if($_POST){
            $student_id = isset($_POST['student_id'])?addslashes($_POST['student_id']):'';
            $student_name = isset($_POST['student_name'])?addslashes($_POST['student_name']):'';
            $sex = isset($_POST['sex'])?addslashes($_POST['sex']):'';
            $department = isset($_POST['department'])?addslashes($_POST['department']):'';
            $marjor = isset($_POST['marjor'])?addslashes($_POST['marjor']):'';
            $now = time();

            $res = DB::insert('insert into student (student_id,student_name,sex,department,marjor,ctime) values (?,?,?,?,?,?)',array($student_id,$student_name,$sex,$department,$marjor,$now));

            if ($res) {
                $tip = 'ok';
                // echo 'ok';
            } else {
                $tip = 'sth wrong';
                // echo 'sth wrong';
            }
        }

        return view('student.create',array('tip'=>$tip));
    }

    /**
     * 录入学生信息
     *
     * @todo  数据检查 
     * @return 
     */
    public function createStudentGrade()
    {
        if($_POST){
            $student_id = isset($_POST['student_id'])?addslashes($_POST['student_id']):'';
            $subject = isset($_POST['subject'])?addslashes($_POST['subject']):'';
            $grade = isset($_POST['grade'])?addslashes($_POST['grade']):'';
            $now = time();

            $res = DB::insert('insert into student_grade (student_id,subject,grade,ctime) values (?,?,?,?)',array($student_id,$subject,$grade,$now));

            if ($res) {
                echo 'ok';
            } else {
                echo 'sth wrong';
            }
        }

        return view('student.createStudentGrade',array());
    }


}