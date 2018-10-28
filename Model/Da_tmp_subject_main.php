<?php
// Da_tmp_subject_main
// Jiranuwat Jaiyen
// 19-09-2561
/*
* @Name File : Da_tmp_subject_main
* @Discription : ไฟล์ Da_tmp_subject_main รวมฟังชั่นสำหรับการใช้งาน Table tmp_subject_main 
* @Author : Jiranuwat Jaiyen
* @Create Date : 19-09-2561
*/
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once(dirname(__FILE__)."/Documents_model.php");
	/*
		* @Name class : Da_tmp_subject_main
		* @Discription : class Da_tmp_subject_main ที่สิบทอดจาก Decoument_model โดยฟังชั่นภายในประกอบไปด้วย
						 insert ใช้สำหรับเพื่มข้อมูลลง Table tmp_subject_main 
						 update ใช้สำหรับอัพเดตข้อมูลลง Table tmp_subject_main
						 delete ใช้สำหรับลบข้อมูลจาก Table tmp_subject_main โดยอ้างอิงจาก sjm_id ในการลบ
						 get_by_key ใช้สำหรับเลือกข้อมูลจาก Table tmp_subject_main โดยอ้างอิงจาก sjm_id ในการเลือก
						 get_all ใช้สำหรับเลือกข้อมูลทั้งหมดจาก Table tmp_subject_main
		* @Author : Jiranuwat Jaiyen
		* @Create Date : 19-09-2561
	*/
	class Da_tmp_subject_main extends Documents_model {

		//	 องค์ประกอบภายในตาราง tmp_subject_main
		//	เป็นการสร้างตัวแปรสำหรับเก็บค่าที่ได้รับจากControll แล้วนำไปใช้ใน function ต่างๆ เช่น insert update delete
		public $sjm_id;				//	ตัวแปรภายในตาราง PK_หัวข้อหลัก		
		public $sjm_book_id;		//	ตัวแปรภายในตาราง Fk_เอกสาร
		public $sjm_seq;			//	ตัวแปรภายในตาราง ลำดับหัวข้อหลัก	
		public $sjm_name;			//	ตัวแปรภายในตาราง ชื่อหัวข้อหลัก	
		public $sjm_type;		 	//	ตัวแปรภายในตาราง ชนิดหัวข้อหลัก(สารบัญหรือคำนำ = 0 / บทที่ = 1)	
		public $sjm_round; 			//	ตัวแปรภายในตาราง รอบการทำงาน(รอบสร้างเกณฑ์=1 รอบ /รอบรายงานผล =2 /รอบรวบรวมเล่ม = 3)	
		public $sjm_last_update;	//	ตัวแปรภายในตาราง วันที่อัพโหลดล่าสุด	
		public $sjm_us_id;			//	ตัวแปรภายในตาราง ผู้ใช้ที่อัพเดทล่าสุด
		
		public function __construct(){
			parent::__construct();
			// Your own constructor code
		}
		
		/* 	
			* @Name Function : insert
			* @Discription : ใช้สำหรับเพื่มข้อมูลลง Table tmp_subject_main
			* @Input : sjm_book_id , sjm_seq , sjm_name , sjm_type , sjm_round , sjm_last_update , sjm_us_id
			* @Output : ผลลัพท์ที่เกิด มีการเพื่มข้อมูลลง Table tmp_subject_main และ
						ส่งออกค่า last_insert_id ค่าตำแหน่ง primary key หรือ id insert ล่าสุด 
			* @Author : Jiranuwat Jaiyen
			* @Create Date : 19-09-2561
		*/
		
		public function insert(){
			$sql = "INSERT INTO ".$this->db_sar_name.".tmp_subject_main
					(sjm_id,sjm_book_id,sjm_seq,sjm_name,sjm_type,sjm_round,sjm_last_update,sjm_us_id)
					VALUES(NULL,?,?,?,?,?,NOW(),?)"; // คำสั่ง SQL สำหรับ insert
					//	? ในคำสั่ง SQL ใช้สำหรับข้อมูลที่ต้องใช้การนำเข้าจากภายนอก NOW() ใช้สำหรับเรียกเวลาปัจจุบันของ Server
					// 	และในการ Insert ไม่ควรinsert sjm_id เป็นค่าต่างๆ ควรจะเป็นNULL เพราะในบางครั้งprimarykey อาจซ่้ำกัน 
			$this->db_sar->query($sql, array($this->sjm_book_id,$this->sjm_seq,$this->sjm_name,$this->sjm_type,$this->sjm_round,$this->sjm_us_id)); // คำสั่ง query ข้อมูล โดยพารามิเตอร์ข้อมูลเข้าในรูปแบบอาเรย์ ซึ่งข้อมูลที่เอาเข้าจะต้องครบตาม ? ที่มีในคำสั่ง SQL โดยไล่ลำดับตัวแปรตาม ? 
										//	ตัวแปรที่ใช้จากเป็นตัวแปรที่ภายในตัวตารางที่ประกาศไว้ในบรรทัด public $sjm_name; ซึ่งจะต้องมีการนำเข้าข้อมูลจาก controller ก่อน จึงจะมีข้อมูลสำหรับ Query
			$this->last_insert_id = $this->db_sar->insert_id(); // 	คืนค่าตำแหน่ง primary key หรือ id insert ล่าสุด เก็บไว้ในตัวแปร last_insert_id
			return 	$this->last_insert_id; // return last_insert_id
 		}
		
		/* 	
			* @Name Function : update
			* @Discription : ใช้สำหรับอัพเดตข้อมูลลง Table tmp_subject_main
			* @Input : sjm_book_id , sjm_seq , sjm_name , sjm_type , sjm_round , sjm_last_update , sjm_us_id , sjm_id 
			* @Output : ผลลัพท์ที่เกิด มีการอัพเดตข้อมูลลง Table tmp_subject_main 
			* @Author : Jiranuwat Jaiyen
			* @Create Date : 19-09-2561
		*/		
		
		public function update(){ 
			$sql = "UPDATE ".$this->db_sar_name.".tmp_subject_main
					SET	sjm_book_id = ? , sjm_seq = ? , sjm_name = ? , sjm_type = ?
					, sjm_round = ? , sjm_last_update = NOW() , sjm_us_id = ?
					WHERE sjm_id=?"; // คำสั่ง SQL สำหรับ update	
			$this->db_sar->query($sql, array($this->sjm_book_id,$this->sjm_seq,$this->sjm_name,$this->sjm_type,$this->sjm_round,$this->sjm_us_id,$this->sjm_id));// คำสั่ง query ข้อมูล  ใช้หลักการเดียวกันกับ Insert
		}
		
		/* 	
			* @Name Function : delete
			* @Discription : ใช้สำหรับลบข้อมูลจาก Table tmp_subject_main โดยอ้างอิงจาก sjm_id ในการลบ
			* @Input : sjm_id
			* @Output : ผลลัพท์ที่เกิด มีการลบข้อมูลของ Table tmp_subject_main 
			* @Author : Jiranuwat Jaiyen
			* @Create Date : 19-09-2561
		*/	
		
		public function delete(){
			$sql = "DELETE FROM ".$this->db_sar_name.".tmp_subject_main
					WHERE sjm_id=?"; // คำสั่ง SQL สำหรับ update	
			$this->db_sar->query($sql, array($this->sjm_id));// คำสั่ง query ข้อมูล  ใช้หลักการเดียวกันกับ Insert
		}
		
		
		/* 	
			* @Name Function : get_by_key
			* @Discription : get_by_key ใช้สำหรับเลือกข้อมูลจาก Table tmp_subject_main โดยอ้างอิงจาก sjm_id ในการเลือก
			* @Input : sjm_id 
			* @Output : ส่งออกค่าข้อมูลจาก Table tmp_subject_main ที่ใช้อ้างอิงจาก sjm_id ในการเลือก
			* @Author : Jiranuwat Jaiyen
			* @Create Date : 19-09-2561
		*/
		
		public function get_by_key($withSetAttributeValue = FALSE)	{
			$sql = "SELECT * FROM ".$this->db_sar_name.".tmp_subject_main
					WHERE sjm_id=?"; // คำสั่ง SQL สำหรับ select	
			$query = $this->db_sar->query($sql, array($this->sjm_id));// คำสั่ง query ข้อมูล  ใช้หลักการเดียวกันกับ Insert
			if ($withSetAttributeValue) {
				$this->row2attribute($query->row()); // แปลจาก query ให้กลายเป็น row หรือ array
			} else {
				return $query;
			}
		}
		
		/* 	
			* @Name Function : get_all
			* @Discription : ใช้สำหรับเลือกข้อมูลทั้งหมดจาก Table tmp_subject_main
			* @Input : -
			* @Output : ส่งออกค่าข้อมูลทั้งหมดจาก Table tmp_subject_main
			* @Author : Jiranuwat Jaiyen
			* @Create Date : 19-09-2561
		*/
		
		public function get_all($withSetAttributeValue = FALSE){
			$sql = "SELECT * FROM ".$this->db_sar_name.".tmp_subject_main"; // คำสั่ง SQL สำหรับ select
			$query = $this->db_sar->query($sql);// คำสั่ง query ข้อมูล  ใช้หลักการเดียวกันกับ Insert
			if ($withSetAttributeValue) {
				$this->row2attribute($query->row()); // แปลจาก query ให้กลายเป็น row หรือ array
			} else {
				return $query;
			}
			
		}
 	}
?> 