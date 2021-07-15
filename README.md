# practical-exercise
Implement the web/mobile application that stores and manages documents of file format,
.txt only.
The System should have three modules:

1. User Management Module
- User Attributes: [ name, email, password]
- CRUD Opera?ons: add user, edit user, delete User
- 
2. Login Module
- Authenticate users

3. File Management Module
- File Attributes: [filename, fileSize, dateOfUpload,fileContent]
- CRUD Operations: upload a file, delete a stored file
i.  Search Management Module
- The system should be able to search the word presumably inside a file and return all files
that contains the word being searched.
- The returned files list should be in an order of frequency of the word being searched from
highest to lowest.
e.g., if we have,filele1, filee2, file3 andfile4.
then searched word is "engine" and it is found thatfile1 has 4 occurrences., file2 has 5
occurrences.,filele3 has 10 occurrences. andfile4 has 1 occurrence.
The files would be displayed in the order: file3, file2, file1, file4.
- Bonus
Draw the frequency distribution of a searched results showing the x-axis: files, y-axis:
number of occurrences of the word.
Note: The application should be composed of two subsystems, the backend- (REST API) with Database and
Frontend (Client Interface). The communication between the frontend and the backend should be secure.
Use the languages of your choice. preferably latest JavaScript frameworks and latest backend languages
