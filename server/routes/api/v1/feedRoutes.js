// feedRoutes.js
import express from 'express';
import { getFeed } from '../controllers/feedController.js';
import { authenticateToken } from '../middleware/authMiddleware.js';

const router = express.Router();

router.get('/', authenticateToken, getFeed);

export default router;
