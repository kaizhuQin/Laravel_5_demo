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

            <div class=""row>
                录入学生成绩：
            </div>
            <form method="post">
                  <div class="form-group">
                    <label for="student_id">学号</label>
                    <input type="text" class="form-control" id="student_id" placeholder="学号" name="student_id">
                  </div>

                  <div class="form-group">
                    <label for="subject">科目</label>
                    <input type="text" class="form-control" id="subject" placeholder="科目" name="subject">
                  </div>


                  <div class="form-group">
                    <label for="grade">成绩</label>
                    <input type="text" class="form-control" id="grade" placeholder="成绩" name="grade">
                  </div>

                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                  <button type="submit" class="btn btn-default">提交</button>
            </form>
        </div>
    </body>
</html>