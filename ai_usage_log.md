# AI Usage Log

## Interaction 1
### User
How come I cannot access the page when replacing my Canvas ID?

### Assistant Summary
Explained that the People URL should use the KU network ID rather than the instructor's example ID, and reviewed common causes such as file location, permissions, and the tilde character.

## Interaction 2
### User
Can you do the practices?

### Assistant Summary
Inspected the starter `index.html` and `grant_permission.sh`. Created the four required exercises and a shared stylesheet:

- Practice 1: HTML profile containing text, an image, a hyperlink, and a video.
- Practice 2: CSS controls for paragraph text color, border color, and border width.
- Practice 3: JavaScript password verification requiring at least eight characters and matching passwords.
- Practice 4: PHP multiplication table with row and column indexes.

Updated the index page to Lab 3 and added links to all exercises. Checked editor diagnostics and published the files to `public_html` with the required permissions. The local machine did not have the PHP command-line tool installed, so PHP syntax was not checked locally.

## Interaction 3
### User
How do I know the website is available on both GitHub and the EECS People link?

### Assistant Summary
Checked the Git remote, local branch, remote branch, and public URLs. Confirmed that the GitHub repository was reachable and that the local `main` branch matched `origin/main`. Sent HTTP requests to the People URL and confirmed that the index, stylesheet, and practice files returned HTTP 200 responses.

## Interaction 4
### User
For the CSS font control page can you make it so the user can also edit the text width?

### Assistant Summary
Added a paragraph-width slider to Practice 2. The slider changes the demo paragraph width from 40% to 100% and displays the current percentage. Checked editor diagnostics, copied the updated page to `public_html`, and confirmed the People URL returned HTTP 200.

## Interaction 5
### User
For Practice 4, can you change the file to an HTML file with PHP code?

### Assistant Summary
Renamed Practice 4 from `practice4.php` to `practice4.html` while keeping the PHP multiplication-table code. Updated the index link and added an `.htaccess` file so Apache executes PHP embedded in `.html` files. Removed the old public `.php` file. Requested the page with a number parameter and verified that the server returned generated table HTML rather than raw PHP source.

## Interaction 6
### User
[Provided a Canvas course-file URL]

### Assistant Summary
Tried to retrieve the Canvas file. The URL redirected to KU single sign-on and required authentication, so the assistant explained that the file needed to be uploaded or pasted into the conversation.

## Interaction 7
### User
[Uploaded the Gen-AI Log Guide PDF]

### Assistant Summary
Read the guide instructions. The guide requires a Markdown file beginning with `# AI Usage Log`, containing interaction entries with user prompts and assistant summaries. This file was created from the actual conversation and is intended to be submitted as `ai_usage_log.md`.
