# Introduction

The List Manager application is designed to help users organize their tasks efficiently by providing a user-friendly interface for managing lists and list items. This readme outlines the functionalities of the application, including capabilities, requirements, and key terms.

# Confirm List Delete

To ensure data integrity, the application implements a confirmation mechanism before executing a DELETE request to remove a record from the database. Users are prompted with a confirmation page or window and must select "Yes" or "Okay" to proceed with the deletion.

# List and List Item Attributes
## List
idx (Index): Unique identifier for the list.
name (String): Name of the list.
created (Datetime): Date and time when the list was created.
## List Item
idx (Index): Unique identifier for the list item.
text (String): Content of the list item.
checked (Boolean): Indicates whether the list item is checked.
list_idx (FK to list table): Foreign key referencing the list to which the item belongs.
created (Datetime): Date and time when the list item was created.

# List Item Sorting

List items are sorted based on two dimensions:

Checked Status: Checked items appear first.
Creation Date: Items are sorted from oldest to newest.

# Default List Sorting

When the application is first loaded, lists are sorted by their creation date in ascending order.

# Capabilities

The List Manager application offers the following capabilities:

View List Summaries (Read): Users can view summaries of all created lists, displaying only the list names.
View a List (Read): Users can view a specific list along with all its list items.
Create a List: Users can create a new list by providing a name for it.
Add/Remove List Items (Update): Users can add or remove list items to/from a list using the user interface.
Check/Uncheck List Items (Update): Users can mark or unmark list items, and the status is persisted in the database.
Rename a List (Update): Users can change the name of a list.
Delete a List: Users can permanently delete a list and all its associated list items.
Sort List Summaries: Users can sort the display of lists by either name or creation date, in ascending or descending order.

# Terms and Definitions

The following terms are specific to this project variant:

List: A collection of list items.
List Item: A string that can be stored in a list.
For any further inquiries or assistance, please refer to the documentation or contact the support team.
