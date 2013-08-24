public class Address {
	
	public String zipcode;
	
	public String state;
	
	public Person(String first, String last) {
		this.firstName = first;
		this.lastName = last;
	}
	
	public String getZipcode() {
		return this.firstName;
	}
	
	public String getState() {
		return this.lastName;
	}
	
	public String toString() {
		return "First Name: " + this.firstName + ", Last Name: " + this.lastName;
	}
}