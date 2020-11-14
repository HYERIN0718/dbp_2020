#dbp_2020

- 새로배운 내용 
  1. JDBC Java Database Connectivity    
  -자바와 데이터베이스를 연동할 수 있는 API   
  -JVM의 시스템과 DBMS을 연결하고 통신하기 위한 자바의 표준스펙   
  -DBMS에 전달될 SQL구문을 각시스템(Oracle, MySQL등)에 맞도록 변경   
  
  2. Oracle Transaction   
   -트랜잭션이란 db의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위   
   -rollback, commit   
  
  3. JDBC -SQL쿼리 전송 인터페이스
   -자바에서 DB로 쿼리문을 전송할 때 사용할 수 있는 인터페이스   
   -SQL질의문을 전달하는 역할   
   -사용할 때 반드시 try catch문 혹은 throws 처리를 해야함   
   -Statement(정적) vs PreparedStatement(동적)   
   
- 문제가 발생하거나 고민한 내용   
 1. insert문을 이용해 employee_id가 208인 문장을 만들어봤는데 실행이 안돼서 209인 문장을 또 만들어봤더니 실행되었다. 208인 문장도 만들어보고싶었는데
 oracle에서는 209인 문장만 출력되고 이클립스에서는 207인 문장만 출력되었다. 버벅거리고 있을 때 교수님이 delete문 진도나가셔서 오류난 부분만 지우고 수업에 집중했다. delete문을 이용해서 employee_id가 208, 209인 문장을 지우고 출력했더니 고칠 수 있었다.
 그리고 commit문을 사용해주어서 oracle과 java사용할 때 헷갈리지 않게 되었다. 
 

  


- 과제 영상 : https://youtu.be/XLPbJrgVUlg
