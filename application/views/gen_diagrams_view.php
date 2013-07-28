<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->





<div class="row-fluid">
	<div class="span6">
		<div class="box">
			<div class="box-head">
				<h3>Source Code</h3>
			</div>
			
			<div class="box-content">
				<p>Selected File: <?php echo $select_file_id; ?> </p>
<pre>
public class Outer {

	private String name;

	public String address;

	public Outer() {

	}

	public Outer(String name, String address) {

	}

	public static String getName() 
	{
		return this.name;
	}

	public static void setName(String name) {
		this.name = n;
	}

	public String doMath(int min, int max, int slope) {
		int a = a + cc;
	}

	private static void getMath() {

		return blank;
	}

	protected String setAge(int age, int yearsOld) {

	}

}
</pre>
			</div>  <!-- end div box-content -->
				
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
	
	<div class="span6">
		<div class="box">
			<div class="box-head">
				<h3>Generated UML Diagram</h3>
			</div>  <!-- end div box-head -->
			
			<div class="box-content">
						<table border="1"><tr><th>Outer</th></tr><tr><td><p>-name; String</p><p>+address; String</p></td></tr><tr><td><p>&lt;&lt;constructor&gt;&gt;Outer()</p><p>&lt;&lt;constructor&gt;&gt;Outer(name: String, address: String)</p><p style="text-decoration:underline">+getName(): String</p><p style="text-decoration:underline">+setName(name: String): void</p><p>+doMath(min: int, max: int, slope: int): String</p><p style="text-decoration:underline">-getMath(): void</p><p>#setAge(age: int, yearsOld: int): String</p></td></tr></table>
			</div>  <!-- end div box-content -->
				
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->	
</div>  <!-- end row-fluid div -->




<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->