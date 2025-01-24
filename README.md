# PHP Object Reference Assignment Bug

This repository demonstrates a common and subtle bug in PHP related to object references and assignment.  Modifying an object through a reference unexpectedly alters the original object.

## The Bug
The `bug.php` file contains code that showcases the issue.  The core problem lies in how PHP handles object assignment; it creates a reference, not a copy.

## The Solution
The `bugSolution.php` file provides a solution using the `clone` keyword to create a deep copy of the object, ensuring independent modifications.