# practical-exercise
the web/mobile applica??n that stores and manages documents of??le format,
.txt only.
The System should have three modules:
1. User Management Module
? User A?ributes: [ name, email, password]
? CRUD Opera?ons: add user, edit user, delete User
2. Login Module
? Authen??ate users
?
3. File Management Module
? File A???butes: [??ename, ?leSize, dateOfUpload,??leContent]
? CRUD Opera?ons: upload a??le, delete a stored??le
i.  Search Management Module
? The system should be able to search the word presumably inside a??le and return all ??es
that contains the word being searched.
? The returned ?les list should be in an order of frequency of the word being searched from
highest to lowest.
e.g., if we have,??le1, ??e2, ?le3 and??le4.
then searched word is "engine" and it is found that??le1 has 4 occurrences., ???2 has 5
occurrences.,??le3 has 10 occurrences. and??le4 has 1 occurrence.
The files would be displayed in the order: file3, file2, file1, ??e4.
Bonus
Draw the frequency distribu?on of a searched results showing the x-axis: ?les, y-axis:
number of occurrences of the word.
Note: The applica??n should be composed of two subsystems, the backend- (REST API) with Database and
Frontend (Client Interface). The commun????on between the frontend and the backend should be secure.
