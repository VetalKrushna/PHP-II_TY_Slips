<!--26. Write Ajax program to print Order details by selecting a Customer’s
name. Create table Customer and Order as follows with 1 : M cardinality
CUSTOMER (cno, cname, city) and ORDER(ono, odate, shipping
address)
-->
<!-- 
  create table customer(cno int primary key,cname text,city text);
    insert into customer values(1,'Alice','Shrirampur');
    insert into customer values(2,'Bob','Nagar');
 create table order1(ono int primary key,odate date,shipping_Address text,cno int references customer(cno));
    insert into order1 values(101,'2026-02-12','Nagar',2);
    insert into order1 values(102,'2026-04-02','Shrirampur',1);
    insert into order1 values(103,'2026-03-10','Akola',2);

    select * from customer;
    select * from order1;
-->
<html>
  <body>
    <h2>Select Customer Name</h2>
    <select id="cname" onchange="display(this.value)">
      <option value="Alice">Alice</option>
      <option value="Bob">Bob</option>
    </select>

    <div id="response"></div>
  </body>

  <script>
  function display(cname)
  {
    var cname=document.getElementById("cname").value;

    var x=new XMLHttpRequest();
    x.open("GET","Que26-2.php?cname="+cname,true);
    x.send();
    x.onreadystatechange=function()
    {
      if(x.readyState==4 && x.status==200)
      {
        document.getElementById("response").innerHTML=x.responseText;
      }
    }
  }

    </script>
</html>