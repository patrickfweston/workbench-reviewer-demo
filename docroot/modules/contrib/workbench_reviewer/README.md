# Workbench Reviewer

A module that extends Workbench to allow for nodes to be assigned to users for review. Using additional modules like [Workbench Moderation]() or [Workbench Email]() allows for custom workflows to be implemented.

## Example Implementation
Using transitions created with the _Workbench Moderation_ module and automated emails set up via the _Workbench Email_ module, content editors can assign content to administrators for review. During this state transition, automated emails will be sent. Administrators and editors can view content ready for their review using the _Assigned to Me_ view this module provides.

## Configuration

* Enable the module
* Enable moderation for some content types. By default, _Workbench Reviewer_ adds a reviewer field to all content types under moderation.

## Copyright

Copyright 2017 Palantir.net, Inc.
