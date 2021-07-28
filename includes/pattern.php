<form action="/action_page.php">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"
  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
  <input type="submit">
</form>
/* for email validation
An <input> element with type="email" that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."

After the "." sign, add at least 2 letters from a to z: as shown above,
*/

<form action="/action_page.php">
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" name="pwd"
  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
  <input type="submit">
</form>
/*
An <input> element with type="password" that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter:
*/



