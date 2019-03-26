---
extends: _layouts.post
section: content
title: Some useful Git configuration options
date: 2019-3-23
description: List of some useful Git config options to make your life easier
cover_image: 
featured: true
categories: [git]
---

This is a short list of some useful Git config options and commands that are not used that often, but could spare you a lot of headaches and googling time.

### git ignore without .gitignore file

To ignore some untracked files without using .gitignore file, you can add patterns to exclude to .git/info/exclude file.

Check this [SO question](https://stackoverflow.com/questions/653454/how-do-you-make-git-ignore-files-without-using-gitignore) for more details and priority that git uses when excluding files.