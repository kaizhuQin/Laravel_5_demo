<!DOCTYPE html>
<html>
    <head>
        <title>学生管理系统</title>
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
            .container{
                width: 980px;
                margin: 10px auto 10px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <a href="/">学生列表</a>
            <a href="/create">录入学生信息</a>
            <a href="/createStudentGrade">录入学生单科成绩</a>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>学号</th>
                  <th>姓名</th>
                  <th>性别</th>
                  <th>学院</th>
                  <th>专业</th>
                  <th>总分</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    if ($data) {
                        foreach ($data as $key => $student) {
                    ?>
                    <tr>
                      <th scope="row"><?php echo isset($student->student_id)?$student->student_id:''; ?></th>
                      <td><?php echo isset($student->student_name)?$student->student_name:''; ?></td>
                      <td><?php echo isset($student->sex) && $student->sex==0?'女':'男'; ?></td>
                      <td><?php echo isset($student->department)?$student->department:''; ?></td>
                      <td><?php echo isset($student->marjor)?$student->marjor:''; ?></td>
                      <td><?php echo isset($student->gradeTotal)?$student->gradeTotal:'0'; ?></td>
                    </tr>
                <?php
                        }
                    }
                ?>
              </tbody>
            </table>

        </div>
    </body>
</html>