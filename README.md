## The Creative Company
### Project Type:
 - Simple Blog Platform with CakePHP

### Client: 
 - "The Creative Company" - a marketing and advertising agency 

### Business niche:
- Creative services, digital marketing, branding, advertising

## Company Requirements:

### Description
We are looking for a simple blog platform that will allow us to create and publish blog posts on our website. We would like users to be able to register for an account and login to create their own blog posts, which should be organized by categories and searchable by tags or keywords. We would also like users to be able to leave comments on blog posts, which will be moderated by the blog authors.

### Key features:
    User registration and login
    Blog post creation, editing, and deletion
    Categorization and search functionality
    Commenting system with moderation

### DB schema:
    users (id, username, email, password)
    posts (id, title, body, user_id, category_id)
    categories (id, name)
    comments (id, body, user_id, post_id)

### Relations:
 - Each post is associated with a user who authored it, as well as a category.
 - Comments are associated with both a user and a post.
