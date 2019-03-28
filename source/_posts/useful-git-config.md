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

### specify different SSH key for a certain git repo

Because you can't use the same SSH key on more than one Bitbucket or GitHub, it's nice to know about this neat setup.

Add the following to ```~/.ssh/config``` file:

```bash
Host github-other
  HostName github.com
  User git
  IdentityFile ~/.ssh/id_other
  IdentitiesOnly yes
  ```
Where ```Host``` is provisional hostname and ```IdentityFile``` your SSH private key of choice

After this is successfully set up, in order to push or pull from remote repo, you need to set correct remote url: 

```bash
git remote add origin git@github-other:<your-repo>.git
```
More info [here](https://medium.com/@thucnc/how-to-specify-different-ssh-keys-for-git-push-for-a-given-domain-bef56639dc02)