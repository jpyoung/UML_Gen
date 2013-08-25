public class Person {
	
	public String firstName;
	
	public String lastName;
	
	public Person(String first, String last) {
		this.firstName = first;
		this.lastName = last;
	}
	
	public String getFirstName() {
		return this.firstName;
	}
	
	public String getLastName() {
		return this.lastName;
	}
	
	public String toString() {
		return "First Name: " + this.firstName + ", Last Name: " + this.lastName;
	}
}