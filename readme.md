Quick instructions for cloning and starting with this project:

1. Create directory for project: "mkdir <folder>"
2. Clone this Repo: "git clone https://github.com/barkdesignchicago/basewp.git ."
3. DONE

A. If removing old commit history:

Step 1: remove all history

rm -rf .git

Step 2: reconstruct the Git repo with only the current content

git init
git add .
git commit -m "Initial commit"

Step 3: push to GitHub.

git remote add origin <github-uri>
git push -u --force origin master