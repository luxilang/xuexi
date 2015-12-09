<?php
/**
 * 得到角色
 * @param unknown $session
 * @param unknown $role_id
 */
function is_role_lu($session,$role_id) {
    global $DB,$CFG;

    $rs = $DB->get_records('role_assignments', array('userid'=>$session['USER']->id,'roleid'=>$role_id),'','count(*) as num ');
    sort($rs);
    $num = 0;
    if (!empty($rs[0])) {
        $num = $rs[0]->num;
    }
    if ($num > 0) {
        return  true;
    }else{
        return false;
        
    }
}


/**
 * 是否学生
 */
function is_student_lu(){
    global $DB ,$_SESSION,$CFG;
    $is_guanli = is_role_lu($_SESSION,1);
  
    if ($is_guanli) {
        return false ;
    }else{
        //在严格 判断其他角色 不过 这个 用管理员
        $is_xuesheng = is_role_lu($_SESSION,5);
        //var_dump($is_xuesheng);
        if ($is_xuesheng) {
            return true ;
        }else{
            return false ;
        }
    }
}
/**
 * 考试配置
 * @return boolean
 */
function is_conf_exam_lu(){
    global $DB;
    $rs1 = $DB->get_records('config', array('name'=>'kaoshi'),'','*');
    sort($rs1);
    $exam_set = 0;
    if (!empty($rs1[0])) {
        $exam_set = $rs1[0]->value;
    }
    if (!empty($exam_set)) {
        if ($exam_set == 1) {
            return true ;
        }else{
            return false ;
        }
    }else{
        return false ;
    }
}
/**
 * 是考试的学生
 */
function is_student_exam_lu() {
	 global $DB ,$_SESSION,$CFG;
	 if (is_student_lu() && is_conf_exam_lu()) {
	 	$CFG->is_student_exam_lu = true;
	 }else{
	 	$CFG->is_student_exam_lu = false;
	 }
	
}