# UserManagementAssignment

Assignment - Table A-.User ID
                                   PWD
                                   Name 
                                    Email   
                                    Mobile NO.
                                    Status: 1= Active and 0= Inactive 

Table B - User ID [ foreign key of A - User ID]
               Address 1 
               Address 2 
               City 
               State
               Pincode 

FRAMEWORK - ANY AS PER YOUR CHOICE 

* DEVELOP 3 REST API'S 
 
* CREATE ACCOUNT - Mobile number - unique
                                      Email - unique 
                                      User ID - unique 

* VALIDATE ACCOUNT - The user will enter a user ID / PWD

* GET PROFILE - Get full data from TABLE A and TABLE B


CONDITIONS:  PROPER VALIDATION TO BE IMPLEMENTED 
                          FOR EACH FAIL/ SUCCESS SCENARIO API MUST RETURN THE PROPER REASON

=======================================================================================================================

Overview of the Project:
=======================================================================================================================

I have created User Management with two tables User and UserProfile
Used Tailwind designs to make the form and styles

User can Register by filling the forms and there are valdiation to check for different fields and unique values

User will be logged in to their profile after registration. They can see their details there and will be able logout.

Login page has validations and also checks for the correct credentials.

I have used Laravel ui packages for authentication and validations.

*Please run these codes

npm install
npm run dev

*for proper design with Vite
