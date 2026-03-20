-- Tabela USUARIOS para ser usada no projeto

SET time_zone = '-03:00'; -- define o fuso horário brasil, não precisa implementar

CREATE TABLE IF NOT EXISTS USUARIOS ( -- Só cria tabela se não existe(IF NOT EXISTS, looping de criação)
        id_usuarios INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP, -- DEFAULT define valor automaticamente, CURRENT_TIMESTAMP define o tempo atual
ultima_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);
        
desc USUARIOS;

-- lembrar que a senha terá que ser criptografada!

-- IGNORE serve para criar o primeiro usuario, evitando erro de criação de admin
INSERT IGNORE INTO USUARIOS (nome, email, senha) 
    VALUES ('Administrador', 'root@admin.com', '12345'); 
    
INSERT IGNORE INTO USUARIOS (nome, email, senha) 
    VALUES ('Administrador', 'root@admin.com', '12345');
    
select * from usuarios;

SELECT SLEEP(3); -- Segura o tempo em segundos, MAX 4

update USUARIOS set nome = 'Admin' where  id_usuarios=1;   

select * from USUARIOS;
        
