---
extends: _layouts.post
section: content
title: Some useful Git commands
date: 2019-3-23
description: List of some useful Git commands that are not used every day
cover_image: 
featured: true
categories: [git]
---

This is a short list of some useful Git commands that are not used that often, a Git cheat sheet if you will.

### git subtree

```bash
git subtree push --prefix <folder> origin <branch>
```

### removing remote git branches
Remove remote branch locally

```bash
git branch -d -r <remote>/<branch>
```
Remove branch on remote repo

```bash
git push <remote> --delete <branch_name>
```