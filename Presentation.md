build-lists: true

# [fit] Meddling With Evil
## [fit] **WordPress** as a _Headless CMS_ in Your **Laravel** App

---

# [fit] Let's Talk About 
# [fit] CMS'

---

# Let's Talk About CMS'

1. Great for managing beatiful, content-driven websites.
2. Pretty much 💩 for everything else.

---

# Managing Content

1. Powerful, visual editor for your client.
2. Image/multimedia management.
3. Arbitrary customisations.
4. Freedom for client or marketing partner.

---

# Choice of CMS

1. Ease-of-use for clients.
2. Community support.
3. Portability.

---

# Your Laravel App

1. Rapid prototyping.
2. Bespoke functionality.
3. Polished and unique experience.

---

# 👍

---

# Content In Your Laravel App

1. Usually hardcoded; or
2. Half-baked interface.

---

# 👎

---

### [fit] **Flashback** to days building
### [fit] a **virtual filesystem** to support a
### [fit] _custom image management_ UI?

---

# 🤢

---

# [fit] Headless CMS'

---

# What Is a Headless CMS?

1. Content-management for clients.
2. API for developers.

---

# [fit] ZOMG!

---

# Many Providers

1. [Contentful](https://www.contentful.com)
2. [Prismic](https://prismic.io)
3. [WordPress](https://wordpress.org)

---

# Contentful & Prismic

1. Similar functionality.
2. Custom content models - pages, posts, blocks, media, anything.
3. SAAS model, both offer free plans.
4. Brilliant performance - distributed architecture.
5. Secure.
6. Third party dependency.

---

# WordPress

1. Self-hosted; environment and costing considerations.
2. Custom content models using WordPress' [Custom Post Types](https://codex.wordpress.org/Post_Types) and [Advanced Custom Fields](https://www.advancedcustomfields.com).
3. Performance relative to hosting decisions.
4. Security considerations.
5. Open-source.

---

# WordPress REST API

1. Included from WordPress 4.7 onwards.
2. Password authentication; plugins support [OAuth 1.0a](https://wordpress.org/plugins/rest-api-oauth1/) and [JWT](https://jwt.io)
3. Interact with the vast majority of WordPress.
4. **Not the best API**, but usable.

---

# Structuring Your App for a Headless CMS

1. Abstraction using [contracts](https://laravel.com/docs/5.5/contracts) and [repositories](https://martinfowler.com/eaaCatalog/repository.html).
2. Caching layer.
3. That's about it.

---

# [fit] Demo time!

---

---

# Headless CMS Annoyances

1. Maintaining logins for app and CMS.
2. Security considerations.
3. Managing/proxying URLs in content.
