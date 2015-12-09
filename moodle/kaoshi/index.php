<?php


require_once(dirname(__FILE__) . '/../config.php');
require_login();
$rs = $DB->get_records('role_assignments', array('userid'=>$_SESSION['USER']->id,'roleid'=>'1'),'','count(*) as num ');
sort($rs);
$num = 0;
if (!empty($rs[0])) {
	$num = $rs[0]->num;
}


if ($num <=0) die('不可以访问！');
if ($_POST) {
   $kaoshi = intval($_POST['kaoshi']);

   switch ($kaoshi) {
       case '1':
             $sql = "update mdl_config set value=1 where  name='kaoshi' ";
             $DB->execute($sql);

             
             echo "<script>alert('设置成功！');window.history.go(-1);</script>";
       break;
       case '0':
             $sql = "update mdl_config set value=0 where  name='kaoshi' ";
             $DB->execute($sql);
            echo "<script>alert('设置成功！');window.history.go(-1);</script>";
           break;
       default:
           echo '参数错误！';
       break;
   }
   
    exit();
}                                       
$context = context_system::instance();
$PAGE->set_context($context);                              
$PAGE->set_title('考试设置');
$PAGE->set_heading('考试设置');
$PAGE->navbar->add('考试设置');
echo $OUTPUT->header();                                      
?>
<form action="/moodle/kaoshi/index.php"  method="post"  >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%" align="right">&nbsp;</td>
    <td width="42%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">考试设置：</td>
    <td>
    <?php 
    $rs1 = $DB->get_records('config', array('name'=>'kaoshi'),'','*');
    sort($rs1);
    $exam_set = 0;
    if (!empty($rs1[0])) {
        $exam_set = $rs1[0]->value;
    }

	?>
    <input name="kaoshi" type="radio" id="radio" value="0"    <?php echo   empty($exam_set) ?  'checked="checked"' : '' ?>  /> 
      普通模式 
      <input type="radio" name="kaoshi" id="radio2" value="1"  <?php echo   ($exam_set == 1) ?  'checked="checked"' : '' ?> />
      考试模式</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="提交设置" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php 
echo $OUTPUT->footer();