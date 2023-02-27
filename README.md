#Overview

1. Vulnerable Components
1-vulnerable-components/code
Development starts, we create the project structure. An old, know vulnerable version of the framework is used.

1-vulnerable-components/test
We add a dependency checker tool to alert us of vulnerable components.

1-vulnerable-components/fix
Framework, and other vulnerable dependencies get updated to patched versions, of exceptions are added for not-patched ones.

2. SQL Injection
2.1-sql-injection/code
A form to add listings is created. Raw SQL is used, concatenating the code with the user provided input.

2.1-sql-injection/test
We write a simple sql code fuzzer in a helper library to be used in unit tests.

2.1-sql-injection/fix
We sanitize the input ourselves by escaping ', replacing it with \'.

2.2-sql-injection/test
We add a SAST tool to review our code.

2.2-sql-injection/fix
We use prepared statements to delegate the escaping of the input to the SQL engine.

2.3-sql-injection/fix
We use an ORM for extra safety.

3. Weak password storage
3.1-weak-password-storage/code
We create a signup form to take users in. Password is stored in plain text.

3.1-weak-password-storage/fix
We encrypt the passwords using a non-salted hashing algorithm.

3.2-weak-password-storage/test
We use a rainbow table to crack the passwords using brute-force.

3.2-weak-password-storage/fix
We use bcrypt instead.

4. Broken Authentication
4.1-broken-authentication/code
We add a login form letting the user sign in. The session is the user ID base64 encoded.

4.1-broken-authentication/fix
We add a random value to the session, still storing the user ID.

4.2-broken-authentication/fix
Use a random unique value in the session, properly encrypt it, remove user info from it.

5. Broken Deauthentication
5.1-broken-deauthentication/code
We let the user log out. On logout, we clean the session cookie, but we don't remove it from server side.

5.1-broken-deauthentication/test
We add a unit test that logs the user in, stores the session value, logs out, re-insert the stored value in the cookiejar and re-tries to access an authentication required page.

5.1-broken-deauthentication/fix
Delete session data from server side on logout.

5.2-broken-deauthentication/code
Add a password change functionality. We don't invalidate sessions on password change.

5.2-broken-deauthentication/test
We add a unit test that logs the user in, stores the session value, changes the password, re-insert the stored value in the cookiejar and re-tries to access an authentication required page.

5.2-broken-deauthentication/fix
We destroy the session on password change time.

5.3-broken-deauthentication/code
We let the user delete it's account. We don't invalidate the session on user delete.

5.3-broken-deauthentication/test
We add a unit test that logs the user in, stores the session value, deletes the account, re-insert the stored value in the cookiejar and re-tries to access an authentication required page.

5.3-broken-deauthentication/fix
6. Cross Site Request Forgery (CSRF)
6-csrf/code
We add a requirement for authentication to the listing creation form.

6-csrf/test
We fire BURP/ZAP test for CSRF.

6-csrf/fix
We add CSRF check

7. Cross-Site Scripting (xss)
7-xss/code
We add a user profile page, displaying user information. User info is inserted in the page directly, allowing for XSS.

7-xss/test
We fire BURP/ZAP test for XSS.

7-xss/fix
We pass the values to the html in safer ways defined by the templating language.

8. Broken Access Control
8-broken-access-control/code
We add the ability to change own listings. We check for user to be authenticated, but not that user is owner of the listing.

8-broken-access-control/test
We add a unit test that adds 2 listings and 2 users, one owned by each. We test that each user can access it's own listing, but is not able to access other user's listing.

8-broken-access-control/fix
We add access control to check that the user is allowed to edit the listing.

9. XML External Entities (XXE)
9-xxe/code
We add an API to allow users to mass upload listings trough XML. We don't disallow external entities in the XML parser.

9-xxe/test
We fire ZAP/BURP to test for XSS.

9-xxe/fix
We configure XML parsers to be safe.

10. Sensitive Data Exposure
10-sensitive-data-exposure/code
We add an API endpoint to read the listings posted. We serialize the whole user object, exposing private user data and password hashes.

10-sensitive-data-exposure/test
We add a unit test that checks that only expected data ends up in the serialized object.

10-sensitive-data-exposure/fix
We serialize only the data we require.