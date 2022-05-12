/* QUESTAO A */
SELECT b.id, b.nome, b.documento, b.logradouro, b.numero, b.bairro, b.cidade, b.uf, b.celular, b.situacao
FROM beneficiarios b
INNER JOIN veiculos v ON v.id_beneficiario = b.id
WHERE v.situacao = 'A'
GROUP BY b.id;

/* QUESTAO B */
SELECT b.id, b.nome, b.documento, b.logradouro, b.numero, b.bairro, b.cidade, b.uf, b.celular, b.situacao
FROM beneficiarios b
INNER JOIN veiculos v ON v.id_beneficiario = b.id
WHERE b.`situacao` = 'A'
GROUP BY b.id HAVING COUNT(v.id) > 2;

/* QUESTAO C */
SELECT * FROM veiculos v
INNER JOIN produto_veiculo pv ON pv.id_veiculo = v.id
WHERE pv.situacao = 'I'
ORDER BY v.id;

/* QUESTAO D */
SELECT p.*, COUNT(ps.id_servico) AS 'n_servicos' FROM produtos p
INNER JOIN produto_servico ps ON ps.id_produto = p.id
GROUP BY p.`id` HAVING COUNT(ps.id_servico) > 3;

/* QUESTAO E */
UPDATE veiculos v
INNER JOIN beneficiarios b ON b.id = v.`id_beneficiario`
SET v.situacao = 'I' WHERE b.`situacao` = 'I';

/* QUESTAO F */
/* QUESTAO G */
/* QUESTAO H */
