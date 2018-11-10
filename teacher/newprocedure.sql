use schoolspr ;
-- iD ,posting_date , due_date , content --> assignments
-- assignment_iD , ccode , cname , teacher_iD --> assignments_for_courses_postedby_teachers 
-- assignment_iD , student_iD , grade , solution -- > assignments_solvedby_students 
drop procedure  View_List_Of_Assignments ;
delimiter //  
create procedure View_List_Of_Assignments (teacher_id int )  
begin 

Select distinct  a2.assignment_iD ,a2.solution , s.name ,s.iD from assignments a 
inner join assignments_for_courses_postedby_teachers a1 on a.iD = a1.assignment_iD 
inner join assignments_solvedby_students a2 on  a2.assignment_iD= a.iD 
inner join enrolled_students s on s.iD = a2.student_iD 
where teacher_id = a1.teacher_iD  
order by a1.cname,a1.ccode,s.iD ;

end // 
delimiter ; 


drop procedure View_Questions ; 
delimiter //
create procedure View_Questions (
id int
)
begin 

select distinct q.question_iD , q.question , s.Name
from Questions q inner join courses_taughtby_teachers_to_students cts
on q.course_code=cts.ccode and q.course_name=cts.cname
inner join enrolled_students s on s.iD = cts.student_iD
where cts.teacher_iD=id;

end //
delimiter ;

-- drop procedure View_My_Students ;

create procedure View_My_Students (
id int
)
begin
select distinct e.Name , e.grade
from Enrolled_Students e inner join courses_taughtby_teachers_to_students cts
on cts.student_iD=e.iD
where cts.teacher_iD=id
order by e.grade,e.Name 

end //
delimiter ;

drop procedure Teacher_Grade_Assignments ; 

delimiter // 
create procedure Teacher_Grade_Assignments(
AID integer,
grade integer, 
SID integer 
)

begin

update Assignments_SolvedBy_Students a
set a.grade = grade
where a.assignment_iD = AID and a.student_iD = SID ; 
end //
delimiter ;




