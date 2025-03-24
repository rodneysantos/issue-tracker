
# GFP - Github Issues Tracker
A Laravel and PHP web app to view a list of issues for a logged in GitHub user.


## Prerequisites:
- PHP
- Composer
- Laravel's Artisan
- Node


## Run Locally

Clone the project

```bash
  git clone git@github.com:rodneysantos/issue-tracker.git
```

Go to the project directory

```bash
  cd issue-tracker
```

Create a `.env` file and copy-paste the contents from `.env.example`. Then, set the value of `GITHUB_PERSONAL_TOKEN` using your own personal access token.

```bash
GITHUB_PERSONAL_TOKEN=<your_personal_access_token>
```

Install the dependencies

```bash
  composer install
```

```bash
  npm install
```

Create a `database.sqlite` within `<root_dir>/database` directory. Then run:

```bash
php artisan migrate
```

Start the server

```bash
  composer run dev
```

Open a browser and navigate to `http://localhost`.
