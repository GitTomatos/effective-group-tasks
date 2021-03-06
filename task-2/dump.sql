PGDMP                         y         	   book_shop    13.1    13.1     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    32985 	   book_shop    DATABASE     f   CREATE DATABASE book_shop WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE book_shop;
                postgres    false            �            1259    32986    authors    TABLE     Q   CREATE TABLE public.authors (
    id integer NOT NULL,
    name text NOT NULL
);
    DROP TABLE public.authors;
       public         heap    postgres    false            �            1259    32996    books    TABLE     O   CREATE TABLE public.books (
    id integer NOT NULL,
    name text NOT NULL
);
    DROP TABLE public.books;
       public         heap    postgres    false            �            1259    33006    books_authors    TABLE     d   CREATE TABLE public.books_authors (
    book_id integer NOT NULL,
    author_id integer NOT NULL
);
 !   DROP TABLE public.books_authors;
       public         heap    postgres    false            �          0    32986    authors 
   TABLE DATA           +   COPY public.authors (id, name) FROM stdin;
    public          postgres    false    200   �       �          0    32996    books 
   TABLE DATA           )   COPY public.books (id, name) FROM stdin;
    public          postgres    false    201   �       �          0    33006    books_authors 
   TABLE DATA           ;   COPY public.books_authors (book_id, author_id) FROM stdin;
    public          postgres    false    202   {       +           2606    32995    authors authors1_name_key 
   CONSTRAINT     T   ALTER TABLE ONLY public.authors
    ADD CONSTRAINT authors1_name_key UNIQUE (name);
 C   ALTER TABLE ONLY public.authors DROP CONSTRAINT authors1_name_key;
       public            postgres    false    200            -           2606    32993    authors authors1_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY public.authors
    ADD CONSTRAINT authors1_pkey PRIMARY KEY (id);
 ?   ALTER TABLE ONLY public.authors DROP CONSTRAINT authors1_pkey;
       public            postgres    false    200            3           2606    33010     books_authors books_authors_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.books_authors
    ADD CONSTRAINT books_authors_pkey PRIMARY KEY (book_id, author_id);
 J   ALTER TABLE ONLY public.books_authors DROP CONSTRAINT books_authors_pkey;
       public            postgres    false    202    202            /           2606    33005    books books_name_key 
   CONSTRAINT     O   ALTER TABLE ONLY public.books
    ADD CONSTRAINT books_name_key UNIQUE (name);
 >   ALTER TABLE ONLY public.books DROP CONSTRAINT books_name_key;
       public            postgres    false    201            1           2606    33003    books books_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.books
    ADD CONSTRAINT books_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.books DROP CONSTRAINT books_pkey;
       public            postgres    false    201            4           2606    33011 *   books_authors books_authors_author_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.books_authors
    ADD CONSTRAINT books_authors_author_id_fkey FOREIGN KEY (author_id) REFERENCES public.authors(id) ON UPDATE CASCADE ON DELETE CASCADE;
 T   ALTER TABLE ONLY public.books_authors DROP CONSTRAINT books_authors_author_id_fkey;
       public          postgres    false    202    200    2861            5           2606    33016 (   books_authors books_authors_book_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.books_authors
    ADD CONSTRAINT books_authors_book_id_fkey FOREIGN KEY (book_id) REFERENCES public.books(id) ON UPDATE CASCADE ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.books_authors DROP CONSTRAINT books_authors_book_id_fkey;
       public          postgres    false    202    2865    201            �   �   x�-�K�@D�ӧ����0�$.���
~�&D�B��,�Ť��_u�tH񰸠B��NYs��4���{�vBT�����(���5T��)� ���D]��]�A�ѐ�� ����uN����f��3N�:C�N*]Ȩ�=���Di��$2�Z61��[g���/��ŁO�ԑ2�D��      �   �   x�%O;�P�ߞ��Ŀ��6�@bo����J���	A�O�����b>;�;48��52gq��HF7�Ph���hQ��š�M4��9=+c�3Aά)&Z[�4���	C��ɖ�/Z|5սL��𤧖�Y���mC߮�Г���z���Wd$:�dap� 	*���,�+끈� ����      �   P   x���� ����Hg࠘�_G�<ȳ�eu�F͚Z���vm�:�1cƌY�k����l��w��آ	wh�n��g��}$}zw�     