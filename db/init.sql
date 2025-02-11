-- CATEGORIES
CREATE TABLE IF NOT EXISTS categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  lang SMALLINT NOT NULL DEFAULT 1,
  count INT NOT NULL DEFAULT 0,
  UNIQUE (slug)
);

CREATE INDEX idx_categories_slug ON categories (slug);

CREATE INDEX idx_categories_lang ON categories (lang);

CREATE TABLE IF NOT EXISTS posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(500) NOT NULL,
  title VARCHAR(255) NOT NULL,
  description VARCHAR(500) NOT NULL,
  subject VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  thumbnail VARCHAR(255) NOT NULL,
  category_id INT NOT NULL,
  lang SMALLINT NOT NULL DEFAULT 1,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  source_name VARCHAR(255) NOT NULL,
  source_url VARCHAR(500) NOT NULL,
  highlight TINYINT NOT NULL DEFAULT 0,
  hits INT NOT NULL DEFAULT 0,
  unique_id VARCHAR(50) NOT NULL,
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE,
  UNIQUE (slug)
);

CREATE INDEX idx_posts_title ON posts (title);

CREATE INDEX idx_posts_subject ON posts (subject);

CREATE INDEX idx_posts_category ON posts (category_id);

CREATE INDEX idx_posts_slug ON posts (slug);

CREATE INDEX idx_posts_lang ON posts (lang);

CREATE INDEX idx_posts_highlight ON posts (highlight);

CREATE INDEX idx_posts_hits ON posts (hits);

CREATE INDEX idx_posts_unique_id ON posts (unique_id);

CREATE TABLE IF NOT EXISTS tags (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  lang SMALLINT NOT NULL DEFAULT 1,
  count INT NOT NULL DEFAULT 0,
  UNIQUE (slug)
);

CREATE INDEX idx_tags_slug ON tags (slug);

CREATE INDEX idx_tags_lang ON tags (lang);

CREATE TABLE IF NOT EXISTS posts_tags (
  id INT AUTO_INCREMENT PRIMARY KEY,
  post_id INT NOT NULL,
  tag_id INT NOT NULL,
  KEY (post_id, tag_id),
  FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
  FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
);

-- MEDIA
CREATE TABLE IF NOT EXISTS media (
  id INT AUTO_INCREMENT PRIMARY KEY,
  label VARCHAR(500) NOT NULL,
  type INT NOT NULL,
  pos SMALLINT NOT NULL DEFAULT 1,
  post_id INT NOT NULL,
  thumbnail VARCHAR(500) NOT NULL,
  value VARCHAR(500) NOT NULL,
  FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
);


CREATE INDEX idx_media_type ON media (type);