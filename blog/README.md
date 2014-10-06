# Blog

The blog section is running on [Jekyll](http://jekyllrb.com/) and based on [poole](https://github.com/poole/poole).

### Building

1. The poole repo has great instructions on how to get Jekyll up and running. On Windows, use [this guide](https://github.com/juthilo/run-jekyll-on-windows). You don't need Python, I use the Rouge sytax highlighter
2. With a command prompt in the `portfolio/blogs` folder, run `jekyll build & _html2php.bat`
  a. `_html2php.bat` simply renames all the HTML files in `_site` to be PHP
3. No need to use `jekyll serve`, just go to `/blog/_site/` in your browser (you should already be running WAMP or another PHP server)