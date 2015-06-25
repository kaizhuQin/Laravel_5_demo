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
            
            <div class="row">
                <?php echo $tip; ?>
            </div>

            <div class=""row>
                录入学生基本信息：
            </div>
            <form method="post">
                  <div class="form-group">
                    <label for="student_id">学号</label>
                    <input type="text" class="form-control" id="student_id" placeholder="学号" name="student_id">
                  </div>

                  <div class="form-group">
                    <label for="student_name">姓名</label>
                    <input type="text" class="form-control" id="student_name" placeholder="姓名" name="student_name">
                  </div>

                  <div class="form-group">
                    <label for="student_name">性别</label>
                        <select class="form-control" name="sex">
                          <option value="0">女</option>
                          <option value="1">男</option>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="department">学院</label>
                    <input type="text" class="form-control" id="department" placeholder="学院" name="department">
                  </div>

                  <div class="form-group">
                    <label for="marjor">专业</label>
                    <input type="text" class="form-control" id="marjor" placeholder="专业" name="marjor">
                  </div>

                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                  <button type="submit" class="btn btn-default">提交</button>
            </form>
        </div>
    </body>
</html>